### Quick Installation

1. Download the latest version
2. Extract the package and copy all files to your webserver / webspace.
3. Make a copy of the `ipconfig.php.example` file and rename this copy to `ipconfig.php`.
4. Open the `ipconfig.php` file and set your URL like specified in the file.
5. Open `http://your-domain.com/index.php/setup` and follow the instructions.


#### Remove `index.php` from the URL

If you want to remove `index.php` from the URL, follow these instructions. However, this is an _optional_ step and not a requirement. If it's not working correctly, take a step back and use the application with out removing that part from the URL.

1. Make sure that [mod_rewrite] is enabled on your web server.
2. Set the `REMOVE_INDEXPHP` setting in your `ipconfig.php` to `true`.
3. Rename the `htaccess` file to `.htaccess`

> _The name 'InvoicePlane' and the InvoicePlane logo are both copyright by Kovah.de and InvoicePlane.com
and their usage is restricted! For more information visit invoiceplane.com/license-copyright_
