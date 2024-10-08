<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Event List</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Answer</th>
                <th>Date of Event</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
                <tr>
                    <td>{{ $event['title'] }}</td>
                    <td>{{ $event['answer'] }}</td>
                    <td>{{ $event['dateOfEvent'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No events available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
