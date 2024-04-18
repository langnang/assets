# 栅格（grid）

> 运用固定的格子，遵循一定的规则，进行页面的布局设计，使布局规范简洁有规则。

<link rel="stylesheet" type="text/css" href="./../../../../ln-of-css/dist/ln.css" />

```scss
.grid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;

  &,
  * {
    box-sizing: border-box;
  }

  .row {
    margin-right: -15px;
    margin-left: -15px;

    &:before {
      display: table;
      content: " ";
    }

    &:after {
      clear: both;
    }

    @each $s, $p in (xs, sm, md, lg, xl) {
      @for $i from 1 through 12 {
        .col-#{$s}-#{$i} {
          position: relative;
          float: left;
          min-height: 1px;
          padding-left: 15px;
          padding-right: 15px;
          width: (100%/12 * $i);
        }

        .col-#{$s}-offset-#{$i} {
          margin-left: (100%/12 * $i);
        }

        .col-#{$s}-pull-#{$i} {
          left: (100%/12 * $i);
        }
      }
    }
  }
}
```

<div class="grid">
	<div class="row">
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
		<div class="bg-info col-md-1">bg-info col-md-1</div>
	</div>
	<div class="row">
		<div class="bg-info col-md-2">bg-info col-md-2</div>
		<div class="bg-info col-md-2">bg-info col-md-2</div>
		<div class="bg-info col-md-2">bg-info col-md-2</div>
		<div class="bg-info col-md-2">bg-info col-md-2</div>
		<div class="bg-info col-md-2">bg-info col-md-2</div>
		<div class="bg-info col-md-2">bg-info col-md-2</div>
	</div>
	<div class="row">
		<div class="bg-info col-md-6">bg-info col-md-6</div>
		<div class="bg-info col-md-6">bg-info col-md-6</div>
	</div>
</div>
