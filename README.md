# Clacksoverhead 0.0.1

Send a X-Clacks-Overhead HTTP header.

```
X-Clacks-Overhead: GNU Terry Pratchett
```

## How to install an extension

[Download ZIP file](https://github.com/upputter/yellow-clacksoverhead/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How it works

It just works!

Each answer to a HTTP request of a page will be appended with a `X-Clacks-Overhead` HTTP header.

## What?

Take a look at the webpage [GNU Terry Pratchett](http://www.gnuterrypratchett.com).

# Settings
You can configure the following settings in the file `system/extensions/yellow-system.ini`:

  * `clacksOverheadMessage`: the clacks overhead message; you may want to append names (seperated by `;`)