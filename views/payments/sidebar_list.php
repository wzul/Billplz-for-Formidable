
<div class="postbox ">
<div class="handlediv"><br/></div><h3 class="hndle"><span><?php _e('Payments', 'frmbz') ?></span></h3>
<div class="inside">
    <table style="width:95%">
<?php
foreach ($payments as $payment) {
    ?>
        <tr><td><a href="?page=formidable-payments&amp;action=show&amp;id=<?php echo $payment->id ?>"><?php echo date($date_format, strtotime($payment->begin_date)) ?></a></td>
            <td style="text-align:right;"><?php echo FrmBillplzPaymentsHelper::formatted_amount($payment) ?></td>
            <td><?php echo ($payment->completed) ? __('Yes', 'frmbz') : __('No', 'frmbz'); ?></td>
        </tr>
    <?php
    unset($payment);
}
?>
    </table>
</div>
</div>
