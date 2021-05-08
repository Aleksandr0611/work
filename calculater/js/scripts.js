new Vue({
    el: '.sample',
    data: {
        name:'',
        checked: false,
        currencyfrom : [
            {name : "$", desc:"$"},
            {name:"₽", desc:"₽"}

        ],
        convertfrom: "$",
        amount :"",
        amount1 : 1,

    },
    computed: {
            finalamount() {
            var to = this.convertto;
            var from = this.convertfrom;
            var final;
            var fin;
            var zp;
            if(this.amount){

                fin = ((14 /(100 * 12)) * this.amount) / (1 - Math.pow(1 + 14 / 1200,  (-this.amount1)));
                fin = fin.toFixed(2);
                final = fin*this.amount1 - this.amount;
                return fin;}},
        finalamount1() {
            var to = this.convertto;
            var from = this.convertfrom;
            var final;
            var fin;


            if(this.amount){
                fin = ((14 /(100 * 12)) * this.amount) / (1 - Math.pow(1 + 14 / 1200,  (-this.amount1)));
                fin = fin.toFixed(2);
                final = fin*this.amount1 - this.amount;
                final = final.toFixed(2);
                return final;}},



    },
    methods: {
        addLayer(){
            this.layers.push({
                type: this.defaultLayerType,
                height: this.defaultHeight
            })
        }
    }
});