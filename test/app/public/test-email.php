<?php
if (mail('ishlauin@gmail.com', 'Test Email', 'This is a test email to check PHP mail functionality.')) {
    echo 'Mail sent successfully.';
} else {
    echo 'Mail sending failed.';
}
?>
