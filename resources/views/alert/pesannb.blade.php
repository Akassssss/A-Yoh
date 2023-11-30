@if ( $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
    </div>
    
@endif

@if ( Session::get('succes'))
<label>
    <input type="checkbox" class="alertCheckbox" style="display:none" autocomplete="off" />
    <div class="alert success" style="background-color: #EFF;border: 1px solid #DEE;color: #9AA;height:100px">
      <span class="alertClose" style="float: right; padding-top: 5px; font-size: 10px;">X</span>
      <span class="alertText" style="display: table; margin: 30px auto; text-align: center; font-size: 16px;">{{Session::get('succes')}}
      <br class="clear" style="clear: both;"/></span>
    </div>
  </label>
@endif