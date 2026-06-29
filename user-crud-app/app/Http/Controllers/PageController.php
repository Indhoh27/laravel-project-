<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    private function pages(): array
    {
        return [
            'analytics' => [
                'title' => 'Analytics',
                'breadcrumb' => 'Analytics',
                'icon' => 'bx-bar-chart-alt-2',
                'description' => 'Track performance, traffic, and user engagement.',
            ],
            'reports' => [
                'title' => 'Reports',
                'breadcrumb' => 'Reports',
                'icon' => 'bx-file',
                'description' => 'Generate and download business reports.',
            ],
            'calendar' => [
                'title' => 'Calendar',
                'breadcrumb' => 'Calendar',
                'icon' => 'bx-calendar',
                'description' => 'View upcoming events and scheduled tasks.',
            ],
            'invoices' => [
                'title' => 'Invoices',
                'breadcrumb' => 'Invoices',
                'icon' => 'bx-receipt',
                'description' => 'Manage billing and invoice records.',
            ],
            'account' => [
                'title' => 'Account Settings',
                'breadcrumb' => 'Account Settings / Account',
                'icon' => 'bx-user-circle',
                'description' => 'Update your profile and personal information.',
            ],
            'notifications' => [
                'title' => 'Notifications',
                'breadcrumb' => 'Account Settings / Notifications',
                'icon' => 'bx-bell',
                'description' => 'Configure email and push notification preferences.',
            ],
            'connections' => [
                'title' => 'Connections',
                'breadcrumb' => 'Account Settings / Connections',
                'icon' => 'bx-link-alt',
                'description' => 'Manage linked accounts and third-party integrations.',
            ],
            'roles' => [
                'title' => 'Roles & Permissions',
                'breadcrumb' => 'Roles & Permissions',
                'icon' => 'bx-lock-open-alt',
                'description' => 'Control access levels and user permissions.',
            ],
            'support' => [
                'title' => 'Support',
                'breadcrumb' => 'Support',
                'icon' => 'bx-support',
                'description' => 'Get help and contact the support team.',
            ],
        ];
    }

    public function show(string $page): View
    {
        $pages = $this->pages();

        abort_unless(isset($pages[$page]), 404);

        return view('pages.show', [
            'page' => $page,
            'meta' => $pages[$page],
        ]);
    }
}
