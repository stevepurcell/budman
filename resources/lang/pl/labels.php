<?php

return [
    'main' => [
        'home' => 'Home',
    ],
    'modals' => [
        'button_close' => 'Zamknij',
    ],
    'emails' => [
        'forgot_password_text' => 'Kliknij aby zresetować hasło:',
    ],
    'auth' => [
        'sign_in' => 'Zaloguj się',
        'login' => 'Zaloguj',
        'logout' => 'Wyloguj',
        'register' => 'Zarejestruj',
        'register_button' => 'Zarejestruj konto',
        'forgot_password' => 'Zapomniałeś hasła?',
        'reset_password' => 'Reset Hasła',
        'send_password_reset_link' => 'Wyślij link z resetem hasła',
        'properties' => [
            'username' => 'Użytkownik',
            'email' => 'Adres Email',
            'password' => 'Hasło',
            'password_confirmation' => 'Powtórz hasło',
            'remember' => 'Zapamiętaj mnie',
        ],
    ],
    'dashboard' => [
        'singular' => 'Dashboard',
        'properties' => [
            'current_balance' => 'Aktualne saldo',
            'last_purchase' => 'Last Purchase',
            'next_bill' => 'Next Bill',
            'planned_features' => 'Planned Features',
            'zero_based_budgeting' => [
                'title' => 'Zero-based Budgeting',
                'description' => 'Budget to zero using the envelope method to keep your spending in check. Consult your categories to help guide purchasing decisions.'
            ],
            'automatic_bill_reminders' => [
                'title' => 'Automatic Bill Reminders',
                'description' => 'Receive email and push notifications when due dates approach for unpaid bills. Never miss a payment again.'
            ],
            'goal_tracking' => [
                'title' => 'Goal Tracking',
                'description' => 'Achieve your goals with bdgt goal tracking. Painlessly save your way to every milestone.'
            ],
            'interactive_reports' => [
                'title' => 'Interactive Reports',
                'description' => "Access your historical data at any time through bdgt's comprehensive reports. Knowledge is power—analyze past trends to better plan for your future."
            ],
        ]
    ],
    'accounts' => [
        'singular' => 'Konto',
        'plural' => 'Konta',
        'add_button' => 'Dodaj konto',
        'edit_button' => 'Edytuj konto',
        'delete_button' => 'usuń konto',
        'properties' => [
            'date_opened' => 'Data otwarcia',
            'name' => 'Nazwa',
            'balance' => 'Saldo',
            'interest' => 'Oprocentowanie',
            'interest_period' => 'Stopa oprocentowania',
        ],
        'modals' => [
            'create' => [
                'title' => 'Dodaj konto',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz',
            ],
            'edit' => [
                'title' => 'Edycja konta',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz zmiany',

            ],
            'delete' => [
                'title' => 'Usuń konto',
                'close_button' => 'Zamknij',
                'save_button' => 'Usuń',
                'text' => 'Jesteś pewien, że chcesz usunąć konto? Tej operacji nie można cofnąć.',
            ],
        ],
    ],
    'bills' => [
        'singular' => 'Rachunek',
        'plural' => 'Rachunki',
        'add_button' => 'Dodaj rachunek',
        'edit_button' => 'Edytuj rachunek',
        'delete_button' => 'Usuń rachunek',
        'properties' => [
            'label' => 'Nazwa',
            'amount' => 'Kwota',
            'start_date' => 'Data płatności',
            'frequency' => 'Płatność co x dni',
        ],
        'modals' => [
            'create' => [
                'title' => 'Dodaj rachunek',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz',
            ],
            'edit' => [
                'title' => 'Edycja rachunku',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz zmiany',

            ],
            'delete' => [
                'title' => 'Usuń rachunek',
                'close_button' => 'Zamknij',
                'save_button' => 'Usuń',
                'text' => 'Jesteś pewien, że chcesz usunąć rachunek? Tej operacji nie można cofnąć.',
            ],
        ],
    ],
    'calculators' => [
        'singular' => 'Kalkulator',
        'plural' => 'Kalkulatory',
        'debt' => [
            'label' => 'Kalkulator zadłużenia',
            'properties' => [
                'payment' => 'Miesięczne wydatki',
                'currentBalance' => 'Aktualne saldo',
                'interestRate' => 'Oprocentowanie',
                'minimumPayment' => 'Minimalna płatność',
            ],
        ],
    ],
    'categories' => [
        'singular' => 'Kategoria',
        'plural' => 'Kategorie',
        'add_button' => 'Dodaj kategorię',
        'edit_button' => 'Edytuj kategorię',
        'delete_button' => 'Usuń kategorię',
        'properties' => [
            'label' => 'Nazwa',
            'budgeted' => 'Budżet',
        ],
        'modals' => [
            'create' => [
                'title' => 'Dodaj kategorię',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz',
            ],
            'edit' => [
                'title' => 'Edytuj kategorię',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz zmiany',

            ],
            'delete' => [
                'title' => 'Usuń kategorię',
                'close_button' => 'Zamknij',
                'save_button' => 'Usuń',
                'text' => 'Jesteś pewien, że chcesz usunąć kategorię? Tej operacji nie można cofnąć.',
            ],
        ],
    ],
    'goals' => [
        'singular' => 'Cel oszczędnościowy',
        'plural' => 'Cele oszczędnościowe',
        'add_button' => 'Dodaj cel oszczędnościowy',
        'edit_button' => 'Edytuj cel oszczędnościowy',
        'delete_button' => 'Usuń cel oszczędnościowy',
        'properties' => [
            'label' => 'Nazwa',
            'amount' => 'Kwota celu',
            'balance' => 'Obecne saldo',
            'goal_date' => 'Termin realizacji',
        ],
        'modals' => [
            'create' => [
                'title' => 'Dodaj cel oszczędnościowy',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz',
            ],
            'edit' => [
                'title' => 'Edycja celu oszczędnościowego',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz zmiany',

            ],
            'delete' => [
                'title' => 'Usuń cel oszczędnościowy',
                'close_button' => 'Zamknij',
                'save_button' => 'Usuń',
                'text' => 'Jesteś pewien, że chcesz usunąć cel oszczędnościowy? Tej operacji nie można cofnąć.',
            ],
        ],
    ],
    'reports' => [
        'singular' => 'Raport',
        'plural' => 'Raporty',
        'spending_by_category' => 'Wydatki z podziałem na kategorie',
        'spending_over_time' => 'Wydatki w czasie',
    ],
    'transactions' => [
        'singular' => 'Transakcja',
        'plural' => 'Transakcje',
        'add_button' => 'Dodaj transakcję',
        'export_button' => 'Export CSV',
        'edit_button' => 'Edytuj transakcję',
        'delete_button' => 'Usuń transakcję',
        'properties' => [
            'date' => 'Data',
            'account_id' => 'Konto',
            'category_id' => 'Kategoria',
            'bill_id' => 'Rachunek',
            'payee' => 'Kontrahent',
            'amount' => 'Kwota',
            'inflow' => 'Przychód',
            'outflow' => 'Rozchód',
            'cleared' => 'Cleared',
            'flair' => 'Kolor',
        ],
        'modals' => [
            'create' => [
                'title' => 'Dodaj transakcję',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz',
            ],
            'edit' => [
                'title' => 'Edycja transakcji',
                'close_button' => 'Zamknij',
                'save_button' => 'Zapisz zmiany',

            ],
            'delete' => [
                'title' => 'Usuwanie transakcji',
                'close_button' => 'Zamknij',
                'save_button' => 'Usuń',
                'text' => 'Jesteś pewien, że chcesz usunąć transakcję? Tej operacji nie można cofnąć.',
            ],
        ],
    ],
];
