<template>
    <component :is="tag">
        <img :src="img" :alt="alt" class="image--shadow-background" :class="classList">
    </component>
</template>

<script>
    export default {
        props: {
            link: {
                type: String,
            },
            img: {
                type: String,
                required: true
            },
            alt: {
                type: String,
                required: false,
                default: 'Wonen op Tetterode sfeerfoto'
            },
            background: {
                type: String,
                required: false,
                default: 'primary',
                validator: (val) => ['primary', 'secondary'].indexOf(val) !== -1
            },
            left: {
                type: Boolean,
                default: false
            },
            classes: {
                type: Array,
                default: () => []
            }
        },
        computed: {
            tag() {
                return (!this.link) ? 'section' : 'a'
            },
            classList() {
                this.classes.push(`image--shadow-${this.background}`)
                if (this.left) {
                    this.classes.push('image--shadow-left')
                }
                
                return this.classes.join(' ')
            }
        }
    }
</script>

<style lang="scss">
    $colors: (
        'primary': #FF6700,
        'secondary': #0092A5
    );
    
    $shadowOffset: 25;
    
    .image--shadow-background {
        position: relative;
        max-width: calc(100% - #{$shadowOffset}px);
        
        &:not(.image--shadow-left) {
            @each $name, $color in $colors {
                &.image--shadow-#{$name} {
                    box-shadow: #{$shadowOffset}px #{$shadowOffset}px $color
                }
            }
        }
        
        /*For the left shadow*/
        &.image--shadow-left {
            margin-left: auto;
            
            @each $name, $color in $colors {
                &.image--shadow-#{$name} {
                    box-shadow: -#{$shadowOffset}px #{$shadowOffset}px $color
                }
            }
        }
        
        @media screen and (max-width: 414px) {
            margin-bottom: 25px;
        }
    }

</style>
