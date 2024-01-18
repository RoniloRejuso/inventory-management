<!DOCTYPE html>
<html>
<head>
    <title>Email Resend Demo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #timerDisplay {
            font-size: 18px;
            margin-bottom: 10px;
        }
        #resendButton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3085d6;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        #resendButton:disabled {
            background-color: lightgray;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

<div id="timerDisplay"></div>

<!-- Resend button -->
<button id="resendButton" onclick="resendEmail()" disabled>Resend</button>

<script>
    let timer;
    let timeLeft = 60;

    function startTimer() {
        timer = setInterval(() => {
            timeLeft--;
            if (timeLeft === 0) {
                clearInterval(timer);
                document.getElementById('resendButton').disabled = false;
                document.getElementById('timerDisplay').innerText = 'Timer expired';
            } else {
                document.getElementById('timerDisplay').innerText = `Time left: ${timeLeft} seconds`;
            }
        }, 1000);
    }

    function resendEmail() {
        document.getElementById('resendButton').disabled = true;
        timeLeft = 60;
        startTimer();

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState === 4) {
                if (this.status === 200) {
                    Swal.fire({
                        title: 'Send another!',
                        text: this.responseText,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'change_pass.php';
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Email could not be resent!',
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                }
            }
        };
        xhr.open('POST', 'resend.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('resend=true');
    }

    window.onload = function() {
        startTimer();
    };
</script>

</body>
</html>
