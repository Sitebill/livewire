@foreach( $form_shape as $key => $item )
    <div class="col col-md-6 col-xl-4">
        <div class="mb-3">
            @switch( $item['type'] )
                @case(Sitebill\Types\Form\Inputs::$DATE_RANGE)
                    @include('sitebill-livewire::form.date-range-picker',
                        [
                            'model_name' => $key,
                            'title' => $item['title'],
                            'date_start_model' => $item['date_start_model'],
                            'date_end_model' => $item['date_end_model'],
                            'date_start_value' => date('m/d/Y', strtotime(${$item['date_start_model']})),
                            'date_end_value' => date('m/d/Y', strtotime(${$item['date_end_model']})),
                            'message' => $message ?? null
                        ])
                    @break
                @case(Sitebill\Types\Form\Inputs::$SELECT)
                    @include('sitebill-livewire::form.select',
                        [
                            'model_name' => $key,
                            'title' => $item['title'],
                            'autocomplete' => $item['autocomplete'] ?? false,
                            'message' => $message ?? null
                        ])
                    @break
                @case(Sitebill\Types\Form\Inputs::$CHECKBOX)
                    @include('sitebill-livewire::form.checkbox',
                        [
                            'model_name' => $key,
                            'title' => $item['title'],
                            'message' => $message ?? null
                        ])
                    @break
                @case(Sitebill\Types\Form\Inputs::$TEXTAREA)
                    @include('sitebill-livewire::form.textarea',
                        [
                            'model_name' => $key,
                            'title' => $item['title'],
                            'message' => $message ?? null
                        ])
                    @break
                @default
                    @include('sitebill-livewire::form.input',
                        [
                            'model_name' => $key,
                            'title' => $item['title'],
                            'message' => $message ?? null
                        ])
            @endswitch
        </div>
    </div>
@endforeach
