<?php

$text = "What is my perfect crime? I break into Tiffany's at midnight. Do I go for the vault? No, I go for the chandelier. It's priceless. As I'm taking it down, a woman catches me. She tells me to stop. It's her father's business. She's Tiffany. I say no. We make love all night. In the morning, the cops come and I escape in one of their uniforms. I tell her to meet me in Mexico, but I go to Canada. I don't trust her. Besides, I like the cold. Thirty years later, I get a postcard. I have a son and he's the chief of police. This is where the story gets interesting. I tell Tiffany to meet me in Paris by the Trocadero. She's been waiting for me all these years. She's never taken another lover. I don't care. I don't show up. I go to Berlin. That's where I stashed the chandelier.";

$original = $_GET['original_text'];

$replace = $_GET['replace_word'];

$censoredText = str_replace($replace, '***', $original);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>

<body>
<h2>Original text:</h2>
<p><?php echo $original?></p>
<p>The original text is <?php echo strlen($original)?> words long</p>
<h2>Censored text:</h2>
<p><?php echo $censoredText ?></p>
<p>The censored text is <?php echo strlen($censoredText)?> words long</p>


</body>

</html>