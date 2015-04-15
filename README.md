# php-oauth2-example

Example PHP app integrated with Crozdesk's authentication system.

Based on the [bundled Opauth package](https://github.com/opauth/opauth/tree/bundled).

## Running

Pull the opauth-crozdesk strategy after you've cloned this repository:
```bash
git submodule update --init --recursive
```

Once you've got an api key and secret from https://crozdesk.com/users/developers, edit `opauth.conf.php` accordingly.

In the same page you will also need to change the callback url to `http://localhost:3000/crozdesk/oauth2callback`

If you have PHP >= 5.4 installed, you can simply run:
```bash
  php -S localhost:3000
```

And you're ready to go! Open `http://localhost:3000` in a browser and click on Crozdesk to try it out.
