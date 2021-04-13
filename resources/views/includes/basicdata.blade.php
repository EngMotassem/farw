<form method="POST" action="{{route('Home.savebasic')}}">
    @csrf

    <div class="form-group row text-right">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('اسم المدرسة') }}</label>

        <div class="col-md-6">
            <input  type="text" class="form-control @error('schoolname') is-invalid @enderror" name="schoolname"  value="{{$schools}}"required autocomplete="name" autofocus>

            @error('schoolname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('مدير المدرسة') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('mangername') is-invalid @enderror" name="mangername" value="{{$schools}}" required autocomplete="name" autofocus>

            @error('mangername')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير') }}</label>

        <div class="col-md-6">
            <input  type="text" class="form-control @error('mangerphone') is-invalid @enderror" name="mangerphone"  value="{{$schools}}" required autocomplete="name" autofocus>

            @error('mangerphone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الاداري') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('edariname') is-invalid @enderror" name="edariname"  value="{{$schools}}"  autocomplete="name" autofocus>

            @error('edariname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الاداري') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('edariphone') is-invalid @enderror" name="edariphone"  autocomplete="name" autofocus>

            @error('edariphone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الفني') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="faniname"   autocomplete="name" autofocus>

            @error('faniname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الفني') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="faniphone"   autocomplete="name" autofocus>

            @error('faniphone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('المدير المساعد الطلابي') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="tolabiname"   autocomplete="name" autofocus>

            @error('tolabiname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدير المساعد الطلابي') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('tolabiiphone') is-invalid @enderror" name="tolabiiphone"   autocomplete="name" autofocus>

            @error('tolabiiphone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رقم هاتف المدرسة') }}</label>

        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="schoolphone"  required autocomplete="name" autofocus>

            @error('schoolphone')
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

            @error('schooladdress')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('رابط موقع الانترنت') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="wesiteurl"  autocomplete="name" autofocus>

            @error('wesiteurl')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row text-right">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نوع المدرسة') }}</label>

        <div class="col-md-6">
            <input type="radio" name="gender" value=0> {{__('بنين')}}
            <input type="radio" name="gender" value=1> {{__('بنات')}}
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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="notes"   autocomplete="name" autofocus>

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
