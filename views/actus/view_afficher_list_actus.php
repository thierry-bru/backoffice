list actu

<?php
if ($actus)
{
    foreach ($actus as $actu)
    {
        ?>
<?=$actu['text']?>

    <?php
    }
}
else
echo "pas d actu";