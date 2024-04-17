@include('layouts.head')
@include('layouts.header')
<div class="login-box">
    <h2>Complete your Profile</h2>
    <form method="post" action="{{ route('save', Auth::user()->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="user-box">
            <input type="nomber" name="phone" required>
            <label>phone No</label>
        </div>

        <div class="user-box">
            <input type="text" name="address" required>
            <label>Address</label>
        </div>

        <div class="user-box">
            <input type="file" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            save
        </button>
    </form>
</div>
@include('layouts.footer')
@include('layouts.js')
