<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    // 开发环境
    'Development' => [
        'path' => 'dev', // 文件来源目录
        // 设置可写（权限0777）目录
        'setWritable' => [
            'api/runtime', // 新增api
            'api/web/assets', // 新增api
            'backend/runtime',
            'backend/web/assets',
            'frontend/runtime',
            'frontend/web/assets',
        ],
        // 设置可执行目录
        'setExecutable' => [
            'yii',
            'yii_test',
        ],
        // 下列文件包含cookie验证码，需要生成随机串将cookie验证码包含进去
        'setCookieValidationKey' => [
            'api/config/main-local.php', // 新增api
            'backend/config/main-local.php',
            'frontend/config/main-local.php',
        ],
    ],
    // 生产环境
    'Production' => [
        'path' => 'prod', // 文件来源目录
        'setWritable' => [
            'api/runtime', // 新增api
            'api/web/assets', // 新增api
            'backend/runtime',
            'backend/web/assets',
            'frontend/runtime',
            'frontend/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'api/config/main-local.php', // 新增api
            'backend/config/main-local.php',
            'frontend/config/main-local.php',
        ],
    ],
];
