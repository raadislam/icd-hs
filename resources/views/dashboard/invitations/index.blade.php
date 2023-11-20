@extends('dashboard.main')

@section('content')
    <div class="container">
        <div class="page-header" style="margin-top: 0">
            <h1>Invitation Requests</h1>
        </div>
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">Pending Requests <span class="badge">{{ count($invitations) }}</span></div>
            <div class="panel-body" style="padding: 0;">
                @if (!empty($invitations))
                    <table class="table table-responsive table-striped" style="margin-bottom: 0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Invitation Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations as $invitation)
                                <tr>
                                    <td><a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a></td>
                                    <td>{{ $invitation->created_at }}</td>
                                    <td>
                                        <kbd>{{ $invitation->getLink() }}</kbd>
                                    </td>
                                    <td style="">
                                        <div class="btn-group align-self-center" bis_skin_checked="1">
                                            <a href="{{ route('users.edit', $invitation->id) }}" class="">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>

                                            <form action="{{ route('users.destroy', $invitation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No invitation requests!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
