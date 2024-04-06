<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
</x-app-layout>
