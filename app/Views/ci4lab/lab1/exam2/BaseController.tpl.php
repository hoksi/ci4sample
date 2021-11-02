namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
<?php if (empty($helper)): ?>
    protected $helpers = [];
<?php else: ?>
    protected $helpers = [
<?php foreach ($helper as $h): ?>
        '<?= $h ?>', // <?= $h ?> 헬퍼
<?php endforeach; ?>
    ];
<?php endif; ?>

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

<?php if (empty($library)): ?>        
        // E.g.: $this->session = \Config\Services::session();
<?php else: ?>
<?php foreach ($library as $k => $l): ?>
        $this-><?= $k ?> = <?= $l ?>; // <?= ucfirst($k) ?> 라이브러리
<?php endforeach; ?>
<?php endif; ?>
    }
}
