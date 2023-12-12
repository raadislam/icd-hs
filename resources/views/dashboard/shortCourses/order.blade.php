@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-md-6" bis_skin_checked="1">
                <div class="card card-success " bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">Student Form</h3>
                    </div>

                    <div class="card-body" bis_skin_checked="1" style="display: block;">
                        <div bis_skin_checked="1">
                            <div bis_skin_checked="1">
                                <form action="{{ route('borrowers.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Student Name
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <select class="form-control select2-us" name="student_id" required>
                                            @foreach ($students as $student)
                                                <option value={{ $student->user_id }}>
                                                    {{ $student->user_id }}.{{ $student->first_name }}.{{ $student->last_name }}.{{ $student->class_name }}.{{ $student->session_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="book_id" name="book_id"
                                            value="{{ $book->id }}" required hidden>
                                    </div>
                                    <div class="form-group">
                                        <label>Return Date
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <input type="date" class="form-control" id="return_date" name="return_date"
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" bis_skin_checked="1" style="display: block;">
                    </div>
                </div>
            </div>

            <div class="col-md-6" bis_skin_checked="1">
                <div class="card" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Book Details
                        </h3>
                    </div>
                    <div class="card-body" bis_skin_checked="1">
                        <dl class="row">
                            <dt class="col-sm-4">Book Title</dt>
                            <dd class="col-sm-8">{{ $book->title }}</dd>
                            <dt class="col-sm-4">Author Name</dt>
                            <dd class="col-sm-8">{{ $book->author_name }}</dd>
                            <dt class="col-sm-4">Category</dt>
                            <dd class="col-sm-8">{{ $book->category->name }}</dd>
                            <dt class="col-sm-4">Reader level</dt>
                            <dd class="col-sm-8">{{ $book->readerLevel->name }}</dd>
                            <dt class="col-sm-4">Donated By</dt>
                            <dd class="col-sm-8">{{ $book->donors->name }}</dd>
                            <dt class="col-sm-4">Preface</dt>
                            <dd class="col-sm-8">{{ $book->preface }}</dd>

                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var splitedText = state.text.split('.')

            var $state = $(
                `<div>
                    <h6 style="font-weight: bold; margin: 0em">${splitedText[1]} ${splitedText[2]}</h6>
                    <span>ID: ${splitedText[0]}</span> &nbsp;
                    <span>Class: ${splitedText[3]} (${splitedText[4]})</span>
                </div>`
            );
            return $state;
        };

        $(".select2-us").select2({
            templateResult: formatState
        });
    </script>
@endsection
