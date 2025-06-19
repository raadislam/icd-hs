@extends('dashboard.main')
@section('content')
    <h2>Successful Certificates</h2>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Course</th>
                <th>Status</th>
                <th>Sent At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($successRequests as $req)
                <tr>
                    <td>{{ $req->courseUser->name }}</td>
                    <td>{{ $req->course->title }}</td>
                    <td>{{ ucfirst($req->status) }}</td>
                    <td>{{ $req->sent_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Pending / Failed Certificates</h2>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Course</th>
                <th>Status</th>
                <th>Reason</th>
                <th>Retry</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendingOrFailedRequests as $req)
                <tr>
                    <td>{{ $req->courseUser->name }}</td>
                    <td>{{ $req->course->title }}</td>
                    <td>{{ ucfirst($req->status) }}</td>
                    <td>{{ $req->fail_reason }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.certificate.retry', $req->id) }}">
                            @csrf
                            <button class="btn btn-warning btn-sm">Retry</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
