@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Therapy Schedule</h3>
            </div>

            <div class="card-body" style="display: block;">
                <div x-data>
                    <h6 style=" color: red;">* marks are required field</h6>
                    <div class="form-group">
                        <div @change="()=>{$store.schedule_dependencies.therapyId = $event.detail.therapy_id}" data-trigger>

                        </div>
                        <label>
                            Therapy Title
                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                        </label>
                        <select class="form-control select2 slot-dependency" id="therapy-selector" name="therapy" required>
                            @foreach ($therapies as $therapy)
                                <option value="{{ $therapy->id }}">{{ $therapy->title }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <div @change="()=>{$store.schedule_dependencies.therapist_id = $event.detail.therapist_id}"
                            data-trigger>

                        </div>
                        <label>
                            Therapist
                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                        </label>
                        <select class="form-control select2 slot-dependency" id="therapist-selector" name="therapist"
                            required>
                            @foreach ($therapists as $therapist)
                                <option value="{{ $therapist->id }}">{{ $therapist->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                @include('dashboard.schedule.planner')

            </div>
            <div class="card-footer" style="display: block;" />
        </div>



    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // Initialize therapist Elements
            $('#therapist-selector').select2().on('select2:select', function(e) {
                var trigger = $(e.target).parent().children("[data-trigger]")[0];

                const changeEvent = new CustomEvent('change', {
                    "detail": {
                        therapist_id: e.params.data.id
                    }
                });
                trigger.dispatchEvent(changeEvent);
            });

            // Initialize therapy Elements
            $('#therapy-selector').select2().on('select2:select', function(e) {
                var trigger = $(e.target).parent().children("[data-trigger]")[0];

                // trigger.addEventListener('change', function(e) {
                //     alert(e.detail.therapy_id);
                // });

                const changeEvent = new CustomEvent('change', {
                    "detail": {
                        therapy_id: e.params.data.id
                    }
                });
                trigger.dispatchEvent(changeEvent);
            })
        })
    </script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('schedule_dependencies', {
                therapy_id: null,
                therapist_id: null,

                init() {

                },

                set therapistId(id) {
                    this.therapist_id = id;

                    if (this.therapy_id !== null && this.therapist_id !== null) {
                        Alpine.store('schedules').update(this.therapy_id, this.therapist_id)
                    }
                },
                set therapyId(id) {
                    this.therapy_id = id;

                    if (this.therapy_id !== null && this.therapist_id !== null) {
                        Alpine.store('schedules').update(this.therapy_id, this.therapist_id)
                    }

                },

                get therapistId() {
                    return this.therapist_id
                },
                get therapyId() {
                    return this.therapy_id
                },
            });
        })
    </script>
@endpush
