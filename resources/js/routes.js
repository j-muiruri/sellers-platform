import AllGoods from './components/AllGoods.vue';
import AddGood from './components/AddGood.vue';
import EditGood from './components/EditGood.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllGoods
    },
    {
        name: 'add',
        path: '/add',
        component: AddGood
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditGood
    }
];