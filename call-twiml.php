<?php
header('Content-type: text/xml');

$callee = $_REQUEST["To"];
?>

<Response>
<?php if ($callee) { ?>
    <Dial>
    <?php if (preg_match("/^[\d\(\)\-\+ ]+$/", $callee)) { ?>
        <Number><?php echo $callee;?></Number>
    <?php } else { ?>
        <Client><?php echo $callee;?></Client>
    <?php } ?>
    </Dial>
<?php } else { ?>
    <Say voice="woman">
        Everything is awesome. Everything is cool when you're part of a team. Everything is awesome when we're living our dream.
        Everything is better when we stick together. Side by side, you and I gonna win forever, let's party forever. 
        We're the same, I'm like you, you're like me, we're all working in harmony.
    </Say>
<?php } ?>
</Response>