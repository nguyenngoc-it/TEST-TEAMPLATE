
<div class="main-content">
    <h1>Ung dung kiem tra email hop le</h1>
    <form method="post" action="{{route('checkEmail')}}">
        @csrf
        <lable for="email-input">Email:</lable>
        <input type="text" id="email-input" placeholder="nhap email can kiem tra" name="email">
        <input type="text" id="age-input" placeholder="nhap age can kiem tra" name="age">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        ket qua Email: {{$isEmail ? 'dung dinh dang email ': 'sai dinh dang email'}} <br>
        ket qua Age: {{$isAge ? 'dung dinh dang Age ': 'sai dinh dang Age'}}

    @endif

</div>
