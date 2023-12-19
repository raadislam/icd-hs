<div id="schedules-table" x-data ="schedules">
    <span x-init="$nextTick(() => { $dispatch('notice', { text: '🔥 Wait I am Fetching!' }) })"></span>
    <div class="border border-secondary grid-table" x-data="{ weekdays: { 0: 'sunday', 1: 'monday', 2: 'tuesday', 3: 'wednesday', 4: 'thursday', 5: 'friday', 6: 'saturday' } }">
        <template x-for="[key, value] of Object.entries(weekdays)">
            <div style="display: flex; gap: 1em">
                <div class="py-3">
                    <span style="font-weight: bold" x-text="value" class="text-capitalize" /> :
                </div>
                <div style="display: flex; align-items: center;flex-wrap: wrap; gap:1em">
                    <div id='slots'>
                        Time Slot:
                        <template x-if="schedules[key] !== undefined">
                            <template x-for="schedule in schedules[key]" x-init="console.log(schedules[key].slot)">
                                <span @click="$store.slotModal.delete(schedule.id)" x-text="schedule.slot +'&nbsp;X'"
                                    class='timeslot'>
                                </span>
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
                                    <button @click="save(key)" type="button" class="mx-1 btn btn-primary add-slot"
                                        data-target=".bd-example-modal-lg">
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

                delete(key) {
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
                            console.log(response)
                        },
                        error: function(xhr) {
                            //Do Something to handle error
                        }
                    });

                    $(key).remove();
                }

            });

            Alpine.data('schedules', () => ({
                schedules: {},

                init() {
                    this.schedules = {!! $schedules !!};
                },

                delete() {
                    console.log("first delete")
                },

                save(key) {
                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var time = $('#time').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();

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
                            $("#schedules-table").load(" #schedules-table");

                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });
                },
            }));

        })
    </script>

    {{-- <script>
        $(document).ready(function() {
            var slotTarget = null;
            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);

                $('#slot-add').on('click', function(e) {

                    $('#schedule-modal').modal('hide')

                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var value = $('input.datetimepicker-input').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();
                    var weekday = $(slotTarget).attr('data-id');


                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: therapist,
                            therapy_id: therapyId,
                            weekday: weekday,
                            slot: value,
                        },
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });


                    var slotElement = `<span class='timeslot'> ${value} &nbsp;&#9747;</span>`;
                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);
                    $slotModal.modal('hide');
                    $('#schedule-modal').modal('show')
                });

            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
                $('#schedule-modal').modal('hide')
            });

            $(document).on('click', '#schedule-table-modal-btn', function(e) {
                var $scheduleModal = $('#schedule-modal').modal({
                    show: true
                })

                let route = "{{ route('getschedule') }}";
                let token = "{{ csrf_token() }}";

                var therapist = $('#therapist').val();
                var therapyId = $('#therapy').val();
                console.log(therapist)

                $.ajax({
                    url: route,
                    type: 'GET',
                    data: {
                        _token: token,
                        therapist_id: therapist,
                        therapy_id: therapyId,
                    },
                    success: function(response) {
                        $('.modal-body').val(response)
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr)
                    }
                });

            })
        });
    </script> --}}



    {{-- <script>
        $(document).on("click", '.timeslot', function(e) {
            var id = $(e.target).attr("data-id");
            let route = "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
            route = route.replace(':dashboard_therapy_schedule', id)

            $.ajax({
                url: route,
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

            $(e.target).remove();
        });
    </script> --}}




    <script>
        $('#slot').datetimepicker({
            format: 'LT'
        });
    </script>









































    {{-- <script>
        $(document).ready(function() {
            var slotTarget = null;
            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);
                console.log(slotTarget)

                $('#slot-add').on('click', function(e) {

                    $('#schedule-modal').modal('hide')

                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var value = $('input.datetimepicker-input').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();
                    var weekday = $(slotTarget).attr('data-id');

                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: 1,
                            therapy_id: 1,
                            weekday: weekday,
                            slot: value,
                        },
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });


                    var slotElement = `<span class='timeslot'> ${value} &nbsp;&#9747;</span>`;
                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);
                    $slotModal.modal('hide');
                    $('#schedule-modal').modal('show')
                });

            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
                $('#schedule-modal').modal('hide')
            });

            $(document).on('click', '#schedule-table-modal-btn', function(e) {
                var $scheduleModal = $('#schedule-modal').modal({
                    show: true
                })

                let route = "{{ route('getschedule') }}";
                let token = "{{ csrf_token() }}";

                var therapist = $('#therapist').val();
                var therapyId = $('#therapy').val();
                console.log(therapist)

                $.ajax({
                    url: route,
                    type: 'GET',
                    data: {
                        _token: token,
                        therapist_id: therapist,
                        therapy_id: therapyId,
                    },
                    success: function(response) {
                        $('.modal-body').val(response)
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr)
                    }
                });

            })
        });
    </script>
    <script>
        $(document).on("click", '.timeslot', function(e) {
            var id = $(e.target).attr("data-id");
            let route = "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
            route = route.replace(':dashboard_therapy_schedule', id)

            $.ajax({
                url: route,
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

            $(e.target).remove();
        });
    </script> --}}

    <script></script>
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
