export default [
    {
        _name: 'CSidebarNav',
        _children: [
            {
                _name: 'CSidebarNavItem',
                name: 'Dashboard',
                to: '/admin/dashboard',
                icon: 'cil-speedometer',
                // badge: {
                //   color: 'primary',
                //   text: 'NEW'
                // }
            },
            // {
            //   _name: 'CSidebarNavTitle',
            //   _children: ['Theme']
            // },
            {
                _name: 'CSidebarNavItem',
                name: 'Cabañas',
                to: '/admin/cabins',
                icon: 'cil-drop'
            },
            {
                _name: 'CSidebarNavItem',
                name: 'Clientes',
                to: '/admin/clients',
                icon: 'cil-pencil'
            },
            {
                _name: 'CSidebarNavItem',
                name: 'Calendario',
                to: '/admin/calendar',
                icon: 'cil-pencil'
            },
            {
                _name: 'CSidebarNavItem',
                name: 'Alquileres',
                to: '/admin/rentals',
                icon: 'cil-pencil'
            },
        ]
    }
]
