<dom-module id="image-gent">
    <template>
        <img src="{{imgsrc}}" style="max-height: 433; max-width: 700px; min-width: 700px; min-height: 433px;"/>
    </template>
</dom-module>

<script>
    Polymer({
        is: 'image-gent',

        properties: {
            imgsrc: {
                type: String,
                value: function () {
					
					return "<?php include('../scripts/generateTheImage.php');?>";
                }
            }
			
        }
    });
</script>