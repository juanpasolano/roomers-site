@extends('frontMaster')
@section('content')
<div class="content clearfix">

  <div class="separatorDecor"></div>

  @yield('shopNav')


  <div class="rightContent">
    <h1>Your account</h1>

    <h3>Account Informations</h3>

    <div class="accountItem clearfix">
      <p class="left">{{$user->gender}} {{$user->firstname}} {{$user->lastname}}<br>
        {{$user->email}} <br>
        Tel: {{$user->phone}}</p>
        <p class="right">
          <a href="#editProfileModal"  class="btn btn-magenta" role="button" data-toggle="modal">Edit profile</a>
          <a href="#editPasswordModal"  class="btn btn-magenta" role="button" data-toggle="modal">Change password</a>
        </p>
      </div>
      <hr class="bs-docs-separator">

      <h3>Address book</h3>
      @foreach($user->addresses as $address)
      <div class="accountItem clearfix">
        <p class="left">
          {{$address->fullname}}<br>
          {{$address->street}}<br>
          {{$address->city_id}}, {{$address->postcode}}<br>
          {{$address->state_id}}, {{$address->country_id}}<br>
          @if($address->is_default == 1)
          <span>This is your defaul address</span><br>
          @endif
        </p>
        <p class="right">
          <a href="#editAddressModal" class="btn btn-magenta" role="button" data-toggle="modal">Edit</a>
          @if($address->is_default == 0)
          <a href="#" class="btn btn-magenta">Delete</a>
          @endif
        </p>
      </div>
      @endforeach

      <a href="#addAddressModal"  class="btn btn-fucsia btn-large" role="button" data-toggle="modal">Add new address</a>

      <hr class="bs-docs-separator">


      <h3>Order summary</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Articles</th>
            <th>Total</th>
            <th>Status</th>
            <th>Payment</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>864</td>
            <td>14/04/2013</td>
            <td>3</td>
            <td>2130.00€</td>
            <td>Open</td>
            <td>Cash</td>
            <td><a href="orderDetail.php" class="btn btn-mini" title="See details"><i class="icon-info-sign"></i></a></td>
          </tr>
          <tr>
            <td>864</td>
            <td>14/04/2013</td>
            <td>3</td>
            <td>2130.00€</td>
            <td>Open</td>
            <td>Cash</td>
            <td><a href="orderDetail.php" class="btn btn-mini"><i class="icon-info-sign"></i></a></td>
          </tr>
          <tr>
            <td>864</td>
            <td>14/04/2013</td>
            <td>3</td>
            <td>2130.00€</td>
            <td>Open</td>
            <td>Cash</td>
            <td><a href="orderDetail.php" class="btn btn-mini"><i class="icon-info-sign"></i></a></td>
          </tr>
        </tbody>
      </table>





    <!-- addAddressModal -->
    <div id="addAddressModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add a new address</h3>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal">
          <fieldset>

            <div class="control-group">
              <label class="control-label" for="input01">Title</label>
              <div class="controls">
                <label class="radio inline">
                  <input type="radio" id="inlineradio1" value="Mr" name="title"> Mr
                </label>
                <label class="radio inline">
                  <input type="radio" id="inlineradio2" value="Ms" name="title"> Ms
                </label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="name">* Full Name</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="name" name="name">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="country">* Country</label>
              <div class="controls">
                <select class="" id="country"  class="input-xlarge" name="country">
                  <option value="1">Österreich</option>
                  <option value="2" selected="selected">Deutschland</option>
                  <option value="3">Schweden</option>
                  <option value="4">Schweiz</option>
                  <option value="5">Europäische Union</option>
                  <option value="6">Belgien</option>
                  <option value="7">Dänemark</option>
                  <option value="8">Estland</option>
                  <option value="9">Finland</option>
                  <option value="10">Frankreich</option>
                  <option value="11">Griechenland</option>
                  <option value="12">Großbrittanien</option>
                  <option value="13">Italien</option>
                  <option value="14">Lettland</option>
                  <option value="15">Litauen</option>
                  <option value="16">Luxemburg</option>
                  <option value="17">Niederlande</option>
                  <option value="18">Polen</option>
                  <option value="19">Portugal</option>
                  <option value="20">Schweden</option>
                  <option value="21">Ungarn</option>
                  <option value="22">Zypern</option>
                  <option value="23">Germany</option>
                  <option value="24">Europe</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="input01">* State</label>
              <div class="controls">
                <select class="" id="stateD" name="stateD">
                 <option value="184">Baden-Württemberg</option>
                 <option value="191">Mecklenburg-Vorpommern</option>
                 <option value="185">Bayern</option>
                 <option value="186">Berlin</option>
                 <option value="187">Brandenburg</option>
                 <option value="188">Bremen</option>
                 <option value="189">Hamburg</option>
                 <option value="190">Hessen</option>
                 <option value="192">Niedersachsen</option>
                 <option value="193">Nordrhein-Westfalen</option>
                 <option value="194">Rheinland-Pfalz</option>
                 <option value="195">Saarland</option>
                 <option value="196">Sachsen</option>
                 <option value="197">Sachsen-Anhalt</option>
                 <option value="198">Schleswig-Holstein</option>
                 <option value="199">Thüringen</option>
                 <option value="200">Deutschland</option>
               </select>
             </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="city">* City</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="city" name="city">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="zipcode">* Zipcode</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="zipcode" name="zipcode">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="street">* Street / No </label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="street" name="street">
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-fucsia">Save</button>
      </div>
    </div>

    <!-- editAddressModal -->
    <div id="editAddressModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Edit address</h3>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal">
          <fieldset>

            <div class="control-group">
              <label class="control-label" for="input01">Title</label>
              <div class="controls">
                <label class="radio inline">
                  <input type="radio" id="inlineradio1" value="Mr" name="title"> Mr
                </label>
                <label class="radio inline">
                  <input type="radio" id="inlineradio2" value="Ms" name="title"> Ms
                </label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="name">* Full Name</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="name" name="name">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="country">* Country</label>
              <div class="controls">
                <select class="" id="country"  class="input-xlarge" name="country">
                  <option value="1">Österreich</option>
                  <option value="2" selected="selected">Deutschland</option>
                  <option value="3">Schweden</option>
                  <option value="4">Schweiz</option>
                  <option value="5">Europäische Union</option>
                  <option value="6">Belgien</option>
                  <option value="7">Dänemark</option>
                  <option value="8">Estland</option>
                  <option value="9">Finland</option>
                  <option value="10">Frankreich</option>
                  <option value="11">Griechenland</option>
                  <option value="12">Großbrittanien</option>
                  <option value="13">Italien</option>
                  <option value="14">Lettland</option>
                  <option value="15">Litauen</option>
                  <option value="16">Luxemburg</option>
                  <option value="17">Niederlande</option>
                  <option value="18">Polen</option>
                  <option value="19">Portugal</option>
                  <option value="20">Schweden</option>
                  <option value="21">Ungarn</option>
                  <option value="22">Zypern</option>
                  <option value="23">Germany</option>
                  <option value="24">Europe</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="input01">* State</label>
              <div class="controls">
                <select class="" id="stateD" name="stateD">
                 <option value="184">Baden-Württemberg</option>
                 <option value="191">Mecklenburg-Vorpommern</option>
                 <option value="185">Bayern</option>
                 <option value="186">Berlin</option>
                 <option value="187">Brandenburg</option>
                 <option value="188">Bremen</option>
                 <option value="189">Hamburg</option>
                 <option value="190">Hessen</option>
                 <option value="192">Niedersachsen</option>
                 <option value="193">Nordrhein-Westfalen</option>
                 <option value="194">Rheinland-Pfalz</option>
                 <option value="195">Saarland</option>
                 <option value="196">Sachsen</option>
                 <option value="197">Sachsen-Anhalt</option>
                 <option value="198">Schleswig-Holstein</option>
                 <option value="199">Thüringen</option>
                 <option value="200">Deutschland</option>
               </select>
             </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="city">* City</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="city" name="city">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="zipcode">* Zipcode</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="zipcode" name="zipcode">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="street">* Street / No </label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="street" name="street">
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-fucsia">Save</button>
      </div>
    </div>

    <!-- editProfileModal -->
    <div id="editProfileModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Edit your profile</h3>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal">
          <fieldset>

            <div class="control-group">
              <label class="control-label" for="input01">Title</label>
              <div class="controls">
                <label class="radio inline">
                  <input type="radio" id="inlineradio1" value="Mr" name="title"> Mr
                </label>
                <label class="radio inline">
                  <input type="radio" id="inlineradio2" value="Ms" name="title"> Ms
                </label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="name">Full Name</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="name" name="name">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="email">Email</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="email" name="email">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="phone">Phone number</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="phone" name="phone">
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-fucsia">Save changes</button>
      </div>
    </div>

    <!-- editPasswordModal -->
    <div id="editPasswordModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Edit your password</h3>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal">
          <fieldset>

            <div class="control-group">
              <label class="control-label" for="current">Current password</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="current" name="current">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="new">New password</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="new" name="new">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="new2">Confirm new password</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="new2" name="new2">
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-fucsia">Save changes</button>
      </div>
    </div>

  </div>

</div>
@endsection