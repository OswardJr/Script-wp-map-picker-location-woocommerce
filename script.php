function fuller() { echo '
<script>
    var URL = window.location.href;

    if (URL == "URL") {
        (function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (objPosition) {
                        var lonn = objPosition.coords.longitude;
                        var latt = objPosition.coords.latitude;

                        var se = "https://maps.google.com/?q=" + latt + "," + lonn;
                        document.getElementById("billing_address_2").value = se;

                        jQuery(function ($) {
                            $("#billing_address_2").wpMapPicker({
                                defaultLocation: { lat: latt, lng: lonn, zoom: 15 },
                                store: "coords",
                            });
                        });
                    },
                    function (objPositionError) {
                        switch (objPositionError.code) {
                            case objPositionError.PERMISSION_DENIED:
                                var se = "https://maps.google.com/?q=-12.0494295,-77.0417369";
                                document.getElementById("billing_address_2").value = se;

                                jQuery(function ($) {
                                    $("#billing_address_2").wpMapPicker({
                                        defaultLocation: { lat: "-12.0494295", lng: "-77.0417369", zoom: 11 },
                                        store: "coords",
                                    });
                                });
                                break;
                            case objPositionError.POSITION_UNAVAILABLE:
                                var se = "https://maps.google.com/?q=-12.0494295,-77.0417369";
                                document.getElementById("billing_address_2").value = se;

                                jQuery(function ($) {
                                    $("#billing_address_2").wpMapPicker({
                                        defaultLocation: { lat: "-12.0494295", lng: "-77.0417369", zoom: 11 },
                                        store: "coords",
                                    });
                                });
                                break;
                            case objPositionError.TIMEOUT:
                                var se = "https://maps.google.com/?q=-12.0494295,-77.0417369";
                                document.getElementById("billing_address_2").value = se;

                                jQuery(function ($) {
                                    $("#billing_address_2").wpMapPicker({
                                        defaultLocation: { lat: "-12.0494295", lng: "-77.0417369", zoom: 11 },
                                        store: "coords",
                                    });
                                });
                                break;
                            default:
                                var se = "https://maps.google.com/?q=-12.0494295,-77.0417369";
                                document.getElementById("billing_address_2").value = se;

                                jQuery(function ($) {
                                    $("#billing_address_2").wpMapPicker({
                                        defaultLocation: { lat: "-12.0494295", lng: "-77.0417369", zoom: 11 },
                                        store: "coords",
                                    });
                                });
                        }
                    },
                    {
                        maximumAge: 75000,
                        timeout: 15000,
                    }
                );
            } else {
                var se = "https://maps.google.com/?q=-12.0494295,-77.0417369";
                document.getElementById("billing_address_2").value = se;

                jQuery(function ($) {
                    $("#billing_address_2").wpMapPicker({
                        defaultLocation: { lat: "-12.0494295", lng: "-77.0417369", zoom: 11 },
                        store: "coords",
                    });
                });
            }
        })();
    } else {
    }
</script>
'; } add_action('wp_footer', 'fuller');
