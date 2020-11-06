package DAO;
import UTL.HibernateUtil;
import java.util.List;

import org.hibernate.Session;
import org.hibernate.Transaction;



import model.Categorieart;

public class CategorieartDao {
	/**
     * Save Categorieart
     * @param Categorieart
     */
	
	public CategorieartDao() {
		super();
		// TODO Auto-generated constructor stub
	}
	
	
	
    public void saveCategorieart(Categorieart categorieart) {
        Transaction transaction = null;
        try (Session session = HibernateUtil.getSessionFactory().openSession()) {
            // start a transaction
            transaction = session.beginTransaction();
            // save the student object
            session.save(categorieart);
            // commit transaction
            transaction.commit();
        } catch (Exception e) {
            if (transaction != null) {
                transaction.rollback();
            }
            e.printStackTrace();
        }
    }

    

	/**
     * UpdateCategorieart
     * @param Categorieart
     */
    public void updateCategorieart(Categorieart categorieart) {
        Transaction transaction = null;
        try (Session session = HibernateUtil.getSessionFactory().openSession()) {
            // start a transaction
            transaction = session.beginTransaction();
            // save the student object
            session.update(categorieart);
            // commit transaction
            transaction.commit();
        } catch (Exception e) {
            if (transaction != null) {
                transaction.rollback();
            }
            e.printStackTrace();
        }
    }

    /**
     * Delete Article
     * @param NumCmd
     */
    public void deleteArticle(String NumCmd) {

        Transaction transaction = null;
        try (Session session = HibernateUtil.getSessionFactory().openSession()) {
            // start a transaction
            transaction = session.beginTransaction();

            // Delete a user object
            Categorieart categorieart = session.get(Categorieart.class, NumCmd);
            if (categorieart != null) {
                session.delete(categorieart);
                System.out.println("categorieart is deleted");
            }

            // commit transaction
            transaction.commit();
        } catch (Exception e) {
            if (transaction != null) {
                transaction.rollback();
            }
            e.printStackTrace();
        }
    }

    /**
     * Get Article By CodeArt
     * @param categorieart
     * @return
     */
    public Categorieart getCategorieart(String NumCmd) {

        Transaction transaction = null;
        Categorieart categorieart = null;
        try (Session session = HibernateUtil.getSessionFactory().openSession()) {
            // start a transaction
            transaction = session.beginTransaction();
            // get an user object
            categorieart = session.get(Categorieart.class, NumCmd);
            // commit transaction
            transaction.commit();
        } catch (Exception e) {
            if (transaction != null) {
                transaction.rollback();
            }
            e.printStackTrace();
        }
        return categorieart;
    }

    /**
     * Get all Categorieart
     * @return
     */
   @SuppressWarnings({ "unchecked" })
    public List < Categorieart > getAllCategorieart() {

        Transaction transaction = null;
        List < Categorieart > listOfCategorieart = null;
        try (Session session = HibernateUtil.getSessionFactory().openSession()) {
            // start a transaction
            transaction = session.beginTransaction();
            // get an user object

            listOfCategorieart = session.createQuery("from Categorieart").getResultList();
            
            // commit transaction
            transaction.commit();
        } catch (Exception e) {
            if (transaction != null) {
                transaction.rollback();
            }
            e.printStackTrace();
        }
        return listOfCategorieart;
    }
}
