<!-- resources/views/video-call.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call App</title>
</head>
<body>
    <h1>Video Call</h1>
    <video id="localVideo" autoplay playsinline></video>
    <video id="remoteVideo" autoplay playsinline></video>

    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
    <script src="https://cdn.socket.io/3.0.4/socket.io.min.js"></script>
    <script src="{{ asset('js/webrtc.js') }}"></script>
</body>
</html>
