

// <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#at-to-cart").click(function () {
            var currentValue = parseInt($("#number-add-cart").text());

            // Increment the value by 1
            var newValue = currentValue + 1;

            // Update the badge with the new value
            $("#number-add-cart").text(newValue); 
        })
    })
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Click me to hide paragraphs</button>

</body>
</html>
