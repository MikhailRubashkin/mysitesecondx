<?php
/**
 * @file
 * Contains \Drupal\custom_form_in_block\Form.
 */
namespace Drupal\custom_form_in_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;

class CustomFormInBlockForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_form_in_block_form';
  }
  /**
   * {@inheritdoc}
   * Form
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    # Text field
    $form['your_name'] = array(
      '#type' => 'textfield',
      '#attributes' => array(
        'placeholder' => 'NAME *',
      ),
    );
    $form['email'] = array(
      '#type' => 'textfield',
      '#attributes' => array(
        'placeholder' => 'E-MAIL *',
      ),
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'SEND',
    );

    return $form;
  }
  /**
   * {@inheritdoc}
   * Submit
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $response =  Url::fromUri('internal:/answer');
    $form_state->setRedirectUrl($response);
  }
}
