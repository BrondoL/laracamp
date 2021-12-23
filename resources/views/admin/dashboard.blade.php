@extends("layouts.app")

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Camp</th>
                                        <th>Price</th>
                                        <th>Register Date</th>
                                        <th>Paid Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($checkouts as $checkout)
                                        <tr>
                                            <td>{{ $checkout->User->name }}</td>
                                            <td>{{ $checkout->Camp->title }}</td>
                                            <td>{{ $checkout->Camp->price }}</td>
                                            <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                            <td>
                                                @if ($checkout->payment_status === 'paid')
                                                    <span class="badge bg-success">Paid</span>
                                                @elseif ($checkout->payment_status === 'waiting')
                                                    <span class="badge bg-warning">Waiting</span>
                                                @else
                                                    <span class="badge bg-danger">Failed</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No camps registered</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
