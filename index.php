<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- POPPINS: Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Data Scrambler | Make Everything Encrypted</title>
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" fill="#4b7bec" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                </svg>
            </span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <div class="header-content">
                    <a href="./index.php">
                        <h1>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" fill="#4b7bec" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                                </svg>
                            </span>
                            Data Scrambler
                        </h1>
                    </a>
                    <p>Scramble Your Secrets Beyond The Internet With Super-Extra Data Encryption!</p>
                    <div class="navigation">
                        <a href="./?task=encode">Encode</a> |
                        <a href="./?task=decode">Decode</a> |
                        <a href="./?task=key">Generate Key</a>
                    </div>
                </div>

                <hr>

                <div class="scrambler-form">
                    <form id="scramble" action="index.php<?php if ('decode' == $task) {
                                                                echo '?task=decode';
                                                            } ?>" method="POST">
                        <label for="key">Key</label>
                        <input type="text" id="key" name="key" placeholder="Enter or Generate a Key..." spellcheck="false" <?php dispKey($key) ?>>


                        <label for="data">Your Data</label>
                        <textarea id="data" name="data" placeholder="Enter Your Data to Get Result..." spellcheck="false"><?php if (isset($_REQUEST["data"])) {
                                                                                                                                echo $_REQUEST["data"];
                                                                                                                            } ?></textarea>

                        <label for="result">Result</label>
                        <textarea name="result" id="result" placeholder="Get Your Result Here..." spellcheck=false><?php echo $scrambledData; ?></textarea>

                        <input type="submit" value="Start Brainstorming">
                    </form>
                </div>

                <div class="footer">
                    <button class="howto-switch">How To</button> <br>

                    <div class="howto">
                        <p>
                            <h3>Instructions</h3>
                            <img src="./tutorial.webp" alt="Tutorial">
                            <ul>
                                <li><b>Encode:</b> To Encode your data, at first you have to generate a key. Don't trust on default generated key! Then try typing your message/text in the "Your Data" field. You will see the scrambled result on "Result" field. <br> Now, Start Brainstorming!</li>
                                <li><b>Decode:</b> To Decode a scrambled data, at first enter the secret key that was already generated. Then enter the scrambled text/message to retain the actual data.</li>
                                <li><b>Generate a Key:</b> Before Encoding, You must generate a new key. Every key is unique and strong enough. When decoding the data, just give the unique key to retain exact and scrambled data.</li>
                            </ul>
                            <p><b>Tips:</b> Try to save the Generated Key & Encoded/Decoded Data somewhere to retain it later.</p>

                        </p>
                    </div>
                    <div class="credit">
                        Made With <span style="color: #4b7bec">❤</span> By <a href="https://alnahian2003.github.io" target="_blank"> Al Nahian</a>
                        <br>
                        Special Thanks To <a href="https://github.com/hasinhayder" target="_blank"> Hasin Hayder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //Hide Preloader on Page Load
        window.addEventListener('load', function() {
            document.querySelector('.preloader').style.display = "none";
        });
        var howToBtn = document.querySelector('.howto-switch');
        var howTo = document.querySelector('.howto');

        howToBtn.addEventListener("click", function() {
            howTo.style.display = "block";
        })
    </script>
</body>

</html>
