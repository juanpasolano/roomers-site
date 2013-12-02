<?php

use Illuminate\Auth\Reminders\DatabaseReminderRepository;


class UsersController extends BaseController {

	/**
	 * DatabaseReminderRepository 
	 *
	 * @var reminders
	 */
	protected $reminders;

	public function __construct()
	{
		$this->reminders = new DatabaseReminderRepository(DB::connection(), Config::get('auth.reminder.table'), Config::get('app.key'));
	}

	public function getCustomerLogin()
	{
	}

	public function postCustomerLogin()
	{
		$creds = array(
			'email' 	=> Input::get('email'),
			'password'	=> Input::get('password'),
			'active'	=> true,
		);

		if (Auth::attempt($creds)) 
		{
			return Redirect::to('/');
		}
		return Redirect::to('/')->with('message' , 'failed auth');
	}
	public function getCmsLogin()
	{
		return View::make('cms.login.login');
	}

	public function postCmsLogin()
	{
		$creds = array(
			'email' 	=> Input::get('email'),
			'password'	=> Input::get('password'),
			'active'	=> true,
			'admin'		=> true
		);


		if (Auth::attempt($creds)) 
		{
			
			 return Redirect::to('cms/products');
		}
		
		return Redirect::to('cms/login')->with('message' , 'credenciales invalidas');
	}

	public function getRegister()
	{
		return View::make('users.create');
	}

	public function postRegister()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->password =  Hash::make(Input::get('password'));
		$user->gender = Input::get('gender');
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->phone = Input::get('phone');
		$user->fax = Input::get('fax');

		try 
		{
			$user->save();	
			$token = $user->getConfirmationToken();
			$email = $user->getReminderEmail();
			$this->sendMail($user->getReminderEmail(), Lang::get('users.mail.subject.confirm'), 'emails.auth.confirm', compact('token', 'email'));
		} 
		catch (Exception $e) 
		{
			dd($e->getMessage());
			return 'error';
		}
		return 'ok';
	}

	public function getConfirmAccount($email, $token)
	{
		$user = User::where('email', '=', $email)->first();
		
		if ($user->confirmAccount($token)) 
		{
			Auth::login($user);
			return Redirect::to('/');
		}
		return Redirect::to('/')->with('message' , 'validación fallida');
	}

	public function postSendToken()
	{
		$email = Input::get('email');
		$user = User::where('email', '=', $email)->first();
		if ($user)
		{
			try
			{
				$token = $this->reminders->create($user);
				$this->sendMail($user->getReminderEmail(), Lang::get('users.mail.subject.reset'), 'emails.auth.reminder', compact('token'));
			}
			catch(Exception $e)
			{
				return 'err';
			}
			return Redirect::to('/')->with('message', 'reset email sent');
		}
		return 'err';
	}

	public function getReset($token)
	{
		return View::make('users.password-reset')->with('token' , $token);
	}

	public function postResetPassword()
	{

			
		$user = User::where('email', '=', Input::get('email'))->first();
		$token = Input::get('token');
		
		if ($user)
		{
			$this->reminders->deleteExpired();
			if ($this->reminders->exists($user, $token))
			{
				$this->reminders->delete($token);
				$user->password = Hash::make(Input::get('password'));
				$user->save();
				return Redirect::to('/')->with('message' , 'succesfull update');
			}
		}
		return Redirect::to('/')->with('message' , 'couldn\'t reset password, please contact us');
	}


	public function putProfile()
	{
		$user = Auth::user();
		if ($user)
		{
			$user->fill(Input::all());
			$user->save();
		}	
		return 'err';
	}

	public function sendMail($to, $subject, $view_name, $data = array())
	{
		Mail::send($view_name, $data, function($m) use ($to, $subject)
		{
			$m->to($to)->subject($subject);
		});
	}
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function getUserDetails($id)
	{
		$user = User::findOrFail($id);

		$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
		$categories = Category::orderBy('updated_at', 'desc')->get()->all();

		return View::make('users.show')->with('user' , $user)->nest('shopNav', 'front.shopNav', array('collections'=>$collections, 'categories'=>$categories));

	}


}