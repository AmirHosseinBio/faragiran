<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>ایجاد درس جدید برای دوره ها</h2>
<form action="{{ route('lesson.store') }}" method="POST">
    @csrf
    <select name="course_id" required>
        <option value="">دوره را انتخاب کنید</option>
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
        @endforeach
    </select>
    <input type="text" name="name" placeholder="نام درس را وارد کنید">
    <input type="number" name="price" placeholder="قیمت درس را وارد کنید">
    <button type="submit">ایجاد</button>
</form>
<br><br>

<hr>

<br>
@foreach($courses as $course)
<form action="{{ route('course.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h2>تغییر قیمت {{ $course->name }}</h2>
    <p>قیمت فعلی : {{ $course->price }}</p>
    <lable>قیمت جدید : </lable>
    <input type="number" name="price" placeholder="قیمت جدید دوره را وارد کنید">
    <button type="submit">ویرایش</button>
</form>
<br>
@endforeach

</body>
</html>
