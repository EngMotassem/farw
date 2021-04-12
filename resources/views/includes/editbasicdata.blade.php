<form method="POST" action="">
    @csrf

    <div class="form-group row text-right">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('اسم المدرسة') }}</label>

        <div class="col-md-6">
            <input  type="text" class="form-control @error('name') is-invalid @enderror" name="schoolname"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('مدير المدرسة') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="mangername"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير') }}</label>

        <div class="col-md-6">
            <input  type="text" class="form-control @error('name') is-invalid @enderror" name="mangerphone" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الاداري') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="edariname" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الاداري') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="edariphone" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الفني') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="faniname"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الفني') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="faniphone"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الطلابي') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="tolabiname"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الطلابي') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="tolabiiphone"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدرسة') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="schoolphone" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('عنوان المدرسة') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="schooladdress"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رابط موقع الانترنت') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="wesiteurl" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row text-right">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نوع المدرسة') }}</label>

        <div class="col-md-6">
            <input type="radio" name="gender" value="male"> {{__('بنين')}}
            <input type="radio" name="gender" value="female"> {{__('بنات')}}
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ملاحظات') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="notes"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>








    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('حفظ') }}
            </button>
        </div>
    </div>
</form>
