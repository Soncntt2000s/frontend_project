@extends('index')
@section('css')
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <style>
        .register{
            margin: 50px auto;
            width: 60%;
        }

        .row{            
            display: flex;
            height: 700px;
            border-radius: 30px;
            box-shadow:1px 3px 6px 3px rgba(0, 0, 0, 0.3);
        }

        .col-sm-6{
            width: 70%;
            padding-top: 40px;
            margin: 0 auto;
        }

        #tbl-first-row{
            font-weight:bold;}
        #logout{
            padding-right:30px;}        
    </style>
@endsection
@section('title')
| Register
@endsection

@section('container')
    <div class="reponsive">
        <div class="register">
            <div class="row">
                <div class="col-sm-6">
                    <form style="height: auto;" method="post" action="home/register">
                        <div type="hidden" name="_token"></div>
                        <h3 style="padding: 0 20px 20px 0;">Đăng ký thành viên</h3>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text"name="Username" class="form-control" placeholder="Username" required />
                        </div>
                        @if ($errors->has('Username'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('Username')}}</p>
                            </div>
                         @endif
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" required />
                        </div>
                        @if ($errors->has('email'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('email')}}</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="access" class="form-control" placeholder="Địa chỉ" required />
                        </div>
                        @if ($errors->has('access'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('access')}}</p>
                            </div>
                        @endif
                         <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="sdt" class="form-control" placeholder="Địa chỉ" required />
                        </div>
                        @if ($errors->has('sdt'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('sdt')}}</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required />
                        </div>
                        @if ($errors->has('pass'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('pass')}}</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" name="enterpass" class="form-control" placeholder="Password" required />
                        </div>
                        @if ($errors->has('enterpass'))
                            <div class="form-group has-feedback">
                                <p style="color: red;">{{$errors->first('enterpass')}}</p>
                            </div>
                        @endif
                        <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary" />
                        @if(Session::has('thanhcong'))
                        <div class="form-group has-feedback">
                            <p style="color: red;">{{ Session::get('thanhcong') }}</p>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>        
@endsection