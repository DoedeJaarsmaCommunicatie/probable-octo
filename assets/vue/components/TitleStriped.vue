<template>
    <component :is="size" class="heading-striped" :class="classList">
        <slot></slot>
    </component>
</template>

<script>
    export default {
        name: "TitleStriped",
        
        props: {
            size: {
                type: String,
                default: 'h3',
                validator: (val) => ['h1', 'h2', 'h3', 'h4'].indexOf(val) !== -1
            },
            
            lineColor: {
                type: String,
                default: 'secondary',
                validator: (val) => ['primary', 'secondary'].indexOf(val) !== -1
            },
            
            textColor: {
                type: String,
                default: 'primary',
                validator: (val) => ['primary', 'secondary'].indexOf(val) !== -1
            },
            
            classes: {
                type: Array,
                default: () => []
            }
        },
        
        computed: {
            classList() {
                this.classes.push(`${this.lineColor}--lining`)
                this.classes.push(`colored--${this.textColor}`)
                
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
    
    $fontStart: 3rem;
    $fontDelta: 0.25rem;
    
    @for $i from 1 through 6 {
        h#{$i} {
            font-size: $fontStart - $i * $fontDelta * 1.5;
            
            @media screen and (min-width: 768px) {
                font-size: $fontStart - $i * $fontDelta;
            }
        }
    }
    
    .heading-striped {
        border-bottom-width: 3px;
        border-style: solid;
        
        @each $name, $color in $colors {
            &.#{$name}--lining {
                border-color: $color;
            }
            
            &.colored--#{$name} {
                color: $color;
            }
        }
    }
</style>
