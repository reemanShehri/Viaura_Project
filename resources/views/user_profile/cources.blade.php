cources page

{{--
according to id , shows the selected category cource

--}}




{{-- ل يتحكم و يضيف و ينقص  --}}

@php
if ($user->role === 'admin') {

    <a href="{{ route('profile.show') }}">profile</a>

    // <a href="{{ route('admin.editCources') }}"> Edit Cources </a>
}

@endphp
