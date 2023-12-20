<div id="schedules-table">
    <div class="border border-secondary grid-table" x-data="{ weekdays: { 0: 'sunday', 1: 'monday', 2: 'tuesday', 3: 'wednesday', 4: 'thursday', 5: 'friday', 6: 'saturday' } }">
        <template x-for="[key, value] of Object.entries(weekdays)">
            <div style="display: flex; gap: 1em">
                <div class="py-3">
                    <span style="font-weight: bold" x-text="value" class="text-capitalize" /> :
                </div>
                <div id="slots-parent" style="display: flex; align-items: center;flex-wrap: wrap; gap:1em">
                    <div id='slots'>
                        <template x-if="$store.schedules.data[key] !== undefined">
                            <template x-for="schedule in $store.schedules.data[key]">
                                <button @click="$store.schedules.destroy(schedule.id, $event.target)"
                                    x-text="schedule.slot +'&nbsp;X'" class="mx-1 btn btn-danger add-slot">
                                </button>
                            </template>
                        </template>
                    </div>

                    <div>
                        <template x-if="$store.slotModal.target !== key">
                            <button @click="$store.slotModal.display(key)" type="button"
                                class="mx-1 btn btn-primary add-slot" data-target=".bd-example-modal-lg">
                                +
                            </button>
                        </template>
                    </div>

                    <div>
                        <template x-if="$store.slotModal.target">
                            <template x-if="$store.slotModal.target === key" x-transition>
                                <div style="display: flex; align-items: center">
                                    <input class="form-control" name="time" id="time" type="time" />
                                    <button @click="$store.schedules.save($event.target)"
                                        class="mx-1 btn btn-primary add-slot" data-target=".bd-example-modal-lg">
                                        Add
                                    </button>
                                </div>
                            </template>
                        </template>
                    </div>
                </div>
            </div>
        </template>

    </div>
</div>




@push('scripts')
    <script>
        function tConvert(time) {
            // Check correct time format and split into components
            time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

            if (time.length > 1) { // If time format correct
                time = time.slice(1); // Remove full string match value
                time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
                time[0] = +time[0] % 12 || 12; // Adjust hours
            }
            return time.join(''); // return adjusted time or original string
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('slotModal', {
                show: false,
                target: null,
                display: false,

                toggle() {
                    this.show = !this.show
                },
                setTarget(target) {
                    this.target = target
                },
                display(display) {
                    this.target = display;
                },
            });

            Alpine.store('schedules', {
                data: {},

                init() {
                    this.data = Alpine.reactive({!! $schedules !!});
                },

                destroy(key, target) {
                    let route =
                        "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
                    route = route.replace(':dashboard_therapy_schedule', key)

                    $.ajax({
                        url: route,
                        method: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            $(target).remove();
                        },
                        error: function(xhr) {
                            //Do Something to handle error
                        }
                    });


                },

                save(slotTarget) {
                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var time = tConvert($('#time').val());
                    var therapist = $('#therapist-selector').val();
                    var therapyId = $('#therapy-selector').val();

                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: therapist,
                            therapy_id: therapyId,
                            weekday: this.key,
                            slot: time,
                        },
                        success: function(response) {
                            var slotElement =
                                `<span class='timeslot'> ${time} &nbsp;&#9747;</span>`;
                            var slotsElement = $(slotTarget).closest('#slots-parent')
                                .children('#slots');

                            $(slotsElement).append(slotElement);
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });
                },

                update(therapyId, therapistId) {

                    let route = "/get-schedule/" + therapyId + "/" + therapistId;
                    let token = "{{ csrf_token() }}";

                    $.ajax({
                        url: route,
                        type: 'GET',

                        success: function(response) {
                            this.data = response.schedules
                            console.log(this.data);
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });

                }
            });

        })
    </script>
@endpush

@push('styles')
    <style>
        .grid-table {
            display: grid;
            grid-template-columns: 50% 50%;
            width: 100%;
            border: 1px solid lightgrey;
            padding: 15px;
        }

        .timeslot {
            display: inline;
            background-color: #ed2939;
            color: #fff;
            padding: 0.5em 0.7em 0.5em 0.7em;
            margin-right: 0.5em;
            cursor: pointer;
        }

        .self-deletable {
            padding: 10px;
            cursor: pointer;
        }
    </style>
@endpush
