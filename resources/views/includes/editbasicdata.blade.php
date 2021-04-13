<form method="POST" action="">
    @csrf

    <div class="form-group row text-right">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('اسم المدرسة') }}</label>

        <div class="col-md-6">
            <input  type="text" class="form-control @error('name') is-invalid @enderror" name="schoolname"  value="{{$schools[0]->schoolname}}" required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="mangername"  value="{{$schools[0]->mangername}}"  required autocomplete="name" autofocus>

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
            <input  type="text" class="form-control @error('name') is-invalid @enderror" name="mangerphone"  value="{{$schools[0]->mangerphone}}" required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="edariname"  value="{{$schools[0]->edariname}}" required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="edariphone"  value="{{$schools[0]->edariphone}}" required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="faniname" value="{{$schools[0]->faniname}}"  required autocomplete="name" autofocus>

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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="faniphone"  value="{{$schools[0]->faniphone}}"  required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="tolabiname" value="{{$schools[0]->tolabiname}}"  required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="tolabiiphone"  value="{{$schools[0]->tolabiiphone}}" required autocomplete="name" autofocus>

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
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="schoolphone" value="{{$schools[0]->schoolphone}}" required autocomplete="name" autofocus>

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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="schooladdress"  value="{{$schools[0]->schooladdress}}"  required autocomplete="name" autofocus>

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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="wesiteurl"  value="{{$schools[0]->wesiteurl}}"  required autocomplete="name" autofocus>

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
            <input type="radio" name="gender" value="male" {{ $schools[0]->gender == '0' ? 'checked' : ''}}> {{__('بنين')}}
            <input type="radio" name="gender" value="female" {{ $schools[0]->gender == '1' ? 'checked' : ''}}> {{__('بنات')}}
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
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="notes"  value="{{$schools[0]->notes}}"  required autocomplete="name" autofocus>

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
