@extends('frontMaster')
@section('content')
	
	     <div class="content clearfix">

        <div class="separatorDecor"></div>

              

                <div class="rightContent">
                        <h1>Create new account</h1>
                        <div class="separator"></div>
                        <form class="form horizontal" action="{{action('UsersController@postRegister')}}" method="POST">
                                <fieldset>
                                        <div class="control-group">
                                                <label class="control-label" for="fistname">* First name</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="firstname" name="firstname">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="lastname">* Last name</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="lastname" name="lastname">
                                                </div>
                                        </div>

                                        <div class="control-group">
                                                <label class="control-label" for="lastname">* Gender</label>
                                                <div class="controls">
                                                <label for="">male</label>
                                                       <input type="radio" name="gender" value="M">
                                                <label for="">female</label>
                                                       <input type="radio" name="gender" value="F">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="email">Email address</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="phone" name="email">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="phone">Phone number</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="phone" name="phone">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="fax">Fax number</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="fax" name="fax">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="password">* Password</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="password" name="password">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="password2">* Confirm Password</label>
                                                <div class="controls">
                                                        <input type="text" class="input-xlarge" id="password2" name="password2">
                                                </div>
                                        </div>
                                        <div class="control-group">
                                                <div class="controls">
                                                <button type="submit" class="btn btn-fucsia">Create account</button>
                                                </div>
                                        </div>
                                </fieldset>
                        </form>
                </div>




        </div><!-- end of content -->

@endsection