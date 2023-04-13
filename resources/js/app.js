import './bootstrap';

import 'flowbite';

import Alpine from 'alpinejs';

import ApexCharts from 'apexcharts'

window.Alpine = Alpine;

Alpine.start();

import { Tabs } from "flowbite";

// create an array of objects with the id, trigger element (eg. button), and the content element
const tabElements = [
    {
        id: 'all',
        triggerEl: document.querySelector('#all-tab'),
        targetEl: document.querySelector('#all')
    },
    {
        id: 'expenses',
        triggerEl: document.querySelector('#expenses-tab'),
        targetEl: document.querySelector('#expenses')
    },
    {
        id: 'incomes',
        triggerEl: document.querySelector('#incomes-tab'),
        targetEl: document.querySelector('#incomes')
    }
];

// options with default values
const options = {
    defaultTabId: 'all',
    activeClasses: 'text-blue-400 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
    inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
    onShow: () => {
        console.log('tab is shown');
    }
};

/*
* tabElements: array of tab objects
* options: optional
*/
const tabs = new Tabs(tabElements, options);

