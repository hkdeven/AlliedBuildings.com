# Contributing

In general feel free to open issues / pull requests if you spot something – though we don't expect anyone outside of Allied to do free work for us. :laughing:

If you're serious about contributing, please have a read of our guidelines below.

## General

Since we're operating on a WordPress platform, [their coding standards][4] will always take precedence.  Use [EditorConfig][1] in your editor of choice, whitespace flipping is naughty! :mask:

## JavaScript

Use [WordPress JavaScript Coding Standards][5] as your baseline.

There's too much to list here, but in general we mostly agree with the [Airbnb ES6 style guide][2]] and [Khan Academy React style guide][3] where applicable.

#### Selector naming conventions

Simple words separated by hyphens as a preference to camelCasing or underscores.

## CSS

Use [WordPress CSS Coding Standards][5] as your baseline.

Some suggestions and guidelines that will make the styling codebase simple, readable, consistent and relatively transferable to other CSS processor languages. Approach writing the code with a 'vanilla CSS' ethos, only adding non-standard syntax (SASS or perhaps PostCSS) when absolutely necessary.

#### Nesting

Try to avoid anything more than a selector nested within an already nested selector (three selectors deep).

```scss
.component-name {
  padding: 20px;

  .element {
    font-size: 16px;

    span {
      font-weight: bold;
    }
  }
}
```

#### Media queries

Write media queries at the bottom of the component/page file, each one inside of the main selector name so as to be in scope of the component for component specific variables.

```scss
.component-name {
  /*...*/

  @media screen and (min-width: $breakpoint) {
    /*...*/
  }
}
```

#### Comments

With this approach in mind use CSS comments `/* ... */` and not SASS `//`.

Each CSS file should have the following at the top:

```css
/*
 *  COMPONENT/PAGE NAME
 *  Short description of that component/page
 *
 *  Notes: Anything unusual or complicated to mention
 *  TODO:
 */
```

#### Loops, functions etc

If you really need them, then go bananas ![image](http://www.sherv.net/cm/emo/funny/2/banana.gif) but document extensively.

[1]: http://editorconfig.org/
[2]: https://github.com/airbnb/javascript
[3]: https://github.com/Khan/style-guides/blob/master/style/react.md
[4]: https://make.wordpress.org/core/handbook/best-practices/coding-standards/
[5]: https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/
[6]: https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/
