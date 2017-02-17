<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p>Thank you for shopping with Altman Plants.  Below you will find the details of your order.</p>
<p>If you have questions regarding your order, please contact us at <a href="marketing@altmanplants.com">marketing@altmanplants.com</a>. You may also refer to our <a href="http://6be.566.myftpupload.com/ordering-information/" target="_blank">Ordering Information</a> page for additional details regarding ordering and shipping.</p> 
<p>Please note our working hours are 8:30 am to 5:00 pm PST and we regret the delay in reply over the non-working hours.</p>

<p>Best regards,<br>
Altman Plants<br>
3742 Bluebird Canyon Rd. Vista, CA 92084<br>
Phone: 800.348.4881 / 760.744.8191  Fax: 760.744.8835<br>
<a href="www.altmanplants.com" target="_blank">www.altmanplants.com</a>
</p>
<p>
<a href="https://www.facebook.com/Altman-Plants-1426639940891946" target="_blank">Facebook</a> | <a href="https://www.youtube.com/channel/UC7ZnqvlBLmfDLbgJclQpzUw" target="_blank">YouTube</a> | <a href="https://www.instagram.com/altmanplants/" target="_blank">Instagram</a> | <a href="https://twitter.com/altmanplants">Twitter</a> | <a href="https://plus.google.com/b/111733036602449981369/+Altmanplants-vista-ca" target="_blank">Google+</a> 
</p>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Emails::order_schema_markup() Adds Schema.org markup.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
