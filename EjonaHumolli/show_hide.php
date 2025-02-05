<!DOCTYPE html>
<html>
<head>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <?php
    $showText = false; // Change this variable to control visibility

    if ($showText) {
        echo '<p>This is the text to show.</p>';
    } else {
        echo '<p class="hidden">This is the hidden text.</p>';
    }
    ?>

    <button onclick="toggleText()">Toggle Text</button>

    <script>
        function toggleText() {
            var textElement = document.querySelector('.hidden');
            textElement.style.display = (textElement.style.display === 'none') ? 'block' : 'none';
        }
    </script>
</body>
</html>
