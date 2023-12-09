@foreach ($students as $student)
    <p>{{ __('Home Test') }}</p>    
    <p>{{ $student->name }}</p>
    <p>{{ $student->course }}</p>
    <p>{{ $student->email }}</p>
    <p>{{ $student->phone }}</p>
       
@endforeach