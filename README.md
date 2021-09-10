# Sage 10 Bootstrap 5 Components

Easily use Bootstrap 5 components as Sage 10 components. 

If you need Bootstrap 4 components, use the 3.x release.

## Installation

Install the composer package (in the theme folder).


```bash
composer require tombroucke/sage-bootstrap-components
```
Remove defaults app/View/Components/Alert.php & resources/views/components/alert.blade.php
Publish the components to app/View/Components and resources/views/components.

```bash
wp acorn vendor:publish --tag="Bootstrap components"
```

## Usage

Examples:


### Accordion
```php
<x-collapse.accordion id="my-accordion">
  <!-- Collapse.accordion.item -->
	<x-collapse.accordion.item accordion-id="my-accordion" show>
		<x-slot name="heading">
			First item title
		</x-slot>
		First item content
	</x-collapse.accordion.item>
	<x-collapse.accordion.item accordion-id="my-accordion">
		<x-slot name="heading">
			Second item title
		</x-slot>
		Second item content
	</x-collapse.accordion.item>
</x-collapse.accordion>
```

### Alert
```php
<x-alert theme="danger" dismissible>
  A simple alert
</x-alert>
```

### Badge
```php
<x-badge theme="danger" pill>
  A badge, displayed as a pill
</x-badge>
```

### Breadcrumb
```php
<x-breadcrumb>
	<x-breadcrumb.item>
		Home
	</x-breadcrumb.item>
	<x-breadcrumb.item href="https://tombroucke.be" active>
		News
	</x-breadcrumb.item>
</x-breadcrumb>
```

### Button
```php
<x-button theme="primary">
	Button label
</x-button>
```

### Button group
```php
<x-button.group>
  <x-button theme="primary">Button label 1</x-button>
  <x-button theme="secondary">Button label 2</x-button>
</x-button.group>
```

### Card
```php
<x-card>
  @slot('header')
    Card header
  @endslot
  @slot('slot')
    Card body
  @endslot
  @slot('footer')
    Card footer
  @endslot
</x-card>
```

### Checkbox
```php
<!-- Checkbox:checkbox -->
<x-checkbox name="checkbox_name">
  Checkbox label
</x-checkbox>

<!-- switch -->
<x-checkbox name="switch_name" value="1" switch>
  Switch label
</x-checkbox>
```


### Input group
```php
<x-input-group label="Amount">
  @slot('start')
    $
  @endslot
  
  <input type="text" class="form-control" aria-label="Amount">
    
  @slot('end')
    .00
  @endslot
</x-input-group>
```


### List group
```php
<x-list-group>
  <!-- List-group.item -->
  <x-list-group.item>
    List item without link
  </x-list-group.item>
  <!-- List-group.link -->
  <x-list-group.link href="https://tombroucke.be" target="_blank">
    List item with link
  </x-list-group.link>
</x-list-group>
```


### Modal
```php
<x-modal id="my-modal">
	<x-slot name="title">
		Title
	</x-slot>
	Content
	<x-slot name="footer">
		<x-button tag="button" type="button" theme="secondary" data-bs-dismiss="modal">Close</x-button>
		<x-button tag="button" type="button" theme="primary">
			Save changes
		</x-button>
	</x-slot>
</x-modal>

<!-- Trigger: Modal -->
<x-trigger.modal theme="danger" target="my-modal">
  Trigger modal
</x-trigger.modal>
```


### Offcanvas
```php
<x-offcanvas type="start" name="offcanvas-navigation">
  @slot('header')
  	Canvas header
  @endslot
  Canvas body
</x-offcanvas>

<!-- Trigger: Offcanvas -->
<x-trigger.offcanvas theme="secondary" target="#offcanvas-navigation">
  Trigger offcanvas
</x-trigger.offcanvas>
```


### Pagination
```php
<x-pagination>
  <x-pagination.item href="/page/1">1</x-pagination.item>
  <x-pagination.item href="/page/2">2</x-pagination.item>
  <x-pagination.item active href="/page/3">3</x-pagination.item>
</x-pagination>
```


### Radio button
```php
<x-radio name="radio_name" value="1">
  Radio label
</x-radio>
```


### Spinner
```php
<x-spinner theme="danger" />
```


### Table
```php
<x-table>
  <thead>
    <tr>
      <th>Foo</th>
      <th>Bar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Foo</td>
      <td>Bar</td>
    </tr>
    <tr>
      <td>Foo</td>
      <td>Bar</td>
    </tr>
  </tbody>
</x-table>
```


### Tabs
```php
<x-nav.tabs>
	<x-slot name="nav">
		<x-nav.tab.link pane="home" active>
			Home
		</x-nav.tab.link>
		<x-nav.tab.link pane="profile">
			Profile
		</x-nav.tab.link>
		<x-nav.tab.link pane="contact">
			Contact
		</x-nav.tab.link>
	</x-slot>

	<x-slot name="panes">
    <!-- Nav.pane -->
		<x-nav.tab.pane id="home" show>
      		Home content
		</x-nav.tab.pane>
    <!-- Nav.pane -->
		<x-nav.tab.pane id="profile">
			Profile content
		</x-nav.tab.pane>
    <!-- Nav.pane -->
		<x-nav.tab.pane id="contact">
			Contact content
		</x-nav.tab.pane>
	</x-slot>
</x-nav.tabs>
```


### Toast

A toast needs some javascript:

```javascript
import {Toast} from 'bootstrap';

const trigger = document.getElementById('js-trigger-toast-liveToast');

trigger.addEventListener('click', function(){
    const el = new Toast(document.getElementById('liveToast'));
    el.show();
});
```

```php
<x-toast id="liveToast" theme="primary" text="white">
  @slot('header')
    Toast header
  @endslot
  Hello, world! This is a toast message.
</x-toast>

<!-- Trigger: Toast -->
<x-trigger.toast theme="danger" target="liveToast">
  Trigger toast
</x-trigger.toast>
```





