Minimum failing example for https://github.com/php/php-src/issues/12532

```
docker build -t phar-bug .
docker run -it --rm  phar-bug
```

This should output 1680284660 or 1680284661. Any other value is evidence of the bug.
