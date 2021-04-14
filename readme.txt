============================================================
= Open Cart Payment Module for Secure Hosting and Payments =
= http://www.securehosting.com/                            =
============================================================
Copyright:				Monek Ltd
Version compatability:	Open Cart V3.0.2.0+ (latest at time of release)


===============
= Installing  =
= Basic Setup =
===============
1.	Copy the directories "admin" and "catalog" to the root of your shopping cart 
	where you should already find directories called "admin" and "catalog".

2.	Upload the below HTML files to your Secure Hosting and Payments account. We 
	recommend uploading the default files first, testing, then amending these 
	files as required. File uploads are managed within your Secure Hosting and 
	Payments account via the menu option Settings > File Manager:
	
	- opencart_template.html
	- htmlgood.html
	- htmlbad.html
    
3.	Go into the Open Cart admin interface and install Secure Hosting and Payments 
	found under Extensions > Payment. Once installed, you will need to edit the 
	configuration of the module. The below fields are required to get you started:

	- SH Reference - This is the SH Reference for your Secure Hosting and Payments 
	account. This is also known as the Client Login, you will find the value for 
	this within the Company Details section of your Secure Hosting and Payments 
	account.
	- Check Code - This is the second level security check code for your Secure 
	Hosting and Payments account, it is a second unique identifier for your account. 
	The value of your check code can be found within the Company Details section 
	of your Secure Hosting and Payments account.
	- File Name - This is the file name of the payment page template you need to 
	upload to your Secure Hosting and Payments account. The file name of the example 
	template provided with this integration module is "opencart_template.html". 
	You can rename this file if you desire, you only need to ensure the name of 
	the file you upload to your Secure Hosting and Payments account is correctly 
	set here.

4.	Put a Transaction through, sit back and have a cup of coffee!!

==========================
= Advanced Configuration =
==========================

	======================
	= Advanced Secuitems =
	======================
	The Secure Hosting and Payments system supports the facility to secure your 
	checkout from tempering, the facility is supported by the Advanced Secuitems 
	feature. In order for the Advanced Secuitems to work correctly, it must be correctly 
	configured in both the Open Cart admin interface and your Secure Hosting and 
	Payments account. The settings for the Advanced Secuitems within your Secure 
	Hosting and Payments account are found within the Advanced Settings section 
	of the account.

1.	Activate Advanced Secuitems - In order to activate use of the Advanced Secuitems, 
	set to "Yes". You will also need to activate the feature within your Secure 
	Hosting and Payments account, this is performed by checking the below setting:
	
	Activate Advanced Secuitems
	
	In addition to activating the Advanced Secuitems in your Secure Hosting and 
	Payments account, you must enter "transactionamount" into the list of fields 
	to be encrypted.
	
2.	Advanced Secuitems Phrase - When securing your checkout, the Secure Hosting 
	and Payments system uses a unique phrase to create it's encrypted string. The 
	phrase entered into your Open Cart web site here must match the phrase configured 
	within the Advanced Settings section of your Secure Hosting and Payments account 
	otherwise the system will block your transactions.
	
3.	Shopping Cart Referrer - As part of the security in generating the encrypted 
	string, the Secure Hosting and Payments system needs to verify the shopping cart 
	request, this is done by checking the referrer. The referrer configured here 
	must match the referrer configured within your Secure Hosting and Payments account 
	within the Advances Settings. An example referrer for your site would be 
	"http://www.mysite.com/index.php".

	=================
	= Test Mode =
	=================	
4.	Test Mode - The Secure Hosting and Payments system can run in test mode and 
	processes your transactions as test transaction. Change this setting to True 
	to use the test mode. Don't forget to change this back to False before going live!

===================
= Troubleshooting =
===================
Q1.	When I get transferred to the Secure Hosting and Payments Site the following 
	message appears: 
	
	The file SH2?????/ does not exist

A1.	You have not completed steps 2 and/or 3 of the installation.

Q2.	When a transaction is submitted the following error is displayed:

	Merchant Implementation Error - Incorrect client SH reference and check code combination
	
A2.	You have entered an incorrect client reference or check code into the Open Cart 
	admin interface.

Q3.	I would like to change the wording 'Credit Card / Debit Card (Secure Hosting and Payments)' 
	that appears on my Payment Information page. How do i do this ?

A3.	You need to edit the catalog\language\en-gb\extension\payment\securehosting.php 
	script and change the line:
	
	$_['text_title'] = 'Credit or Debit Card (Monek)';
	
	To:
	
	$_['text_title'] = 'new text here';

Q4.	When I get transferred to the Secure Hosting and Payments site, the following 
	message appears:

	Advanced secuitems security check failed.

A4.	You have activated the Advanced Secuitems within your Secure Hosting and Payments 
	account but not correctly configured it. Please see steps 1-3 of the Advanced 
	Configuration section of this guide.

==========
= Contact =
===========
If you have any problems installing this module feel free to contact our support team at:
Support Tel     : +44(0) 345 269 6645
Support Email   : support@monek.co.uk 
